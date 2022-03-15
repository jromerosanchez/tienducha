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
                                sh 'docker-compose exec -T tienducha_bbdd_1 sh -c "mysql -u root -psecret iaw_db < /scripts/mysql.sql" || true'
                            }
                        }
                }
        }

