node('php') {
    stage("test") {
        sh 'docker compose exec php php bin/phpunit'
    }
}