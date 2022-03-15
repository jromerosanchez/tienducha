pipeline {
            agent {label 'jorgetienda'}
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
                                sh 'docker-compose up -d'
                                        }
                        }
                        stage('Añadiendo tablas a la BD') {
                            steps {
                                echo 'Añadiendo tablas'
                                sh 'docker exec -i tienducha_bbdd_1 bash -c "cd /scripts; mysql -u root -pbolson iaw_db < mysql.sql" || true'
                            }
                        }
                }
        }

