pipeline {
            agent {label 'tienducha'}
                stages {
                        stage('Descarga') {
                            steps {
                                echo 'Descargando'
                                sh 'rm -R .* || true'
                                sh 'rm -R * || true'
                                sh 'git clone https://github.com/jromerosanchez/tienducha.git .'
                            }
                        }
                        stage('Deploy') {
                            steps {
                                echo 'Desplegando'
                                        dir("/var/lib/jenkins/workspace/tienducha"){
                                sh 'docker-compose up -d'
                                        }
                            }
                        }
                        stage('PHP') {
                            steps {
                                echo 'Añadiendo ficheros PHP'
                                sh 'cp ./php/* web/'
                            }
                        }
                        stage('Añadiendo tablas a la BD') {
                            steps {
                                echo 'Añadiendo tablas'
                                sh 'docker-compose exec -T webserver sh -c "mysql -u root -psecret iaw_db < /scripts/mysql.sql" || true'
                            }
                        }
                }
        }

