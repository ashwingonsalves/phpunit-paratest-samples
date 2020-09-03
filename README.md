# PHPUnit tests for BrowserStack
Using Paratest for parallel execution

[![BrowserStack Status](https://automate.browserstack.com/badge.svg?badge_key=R0F2QVZ6NnFLeDBnQ3Y1aXZoR213Mk9QVUFtU2c4b1NuV3dHQ3lmaXhlYz0tLUJXU3JNUkpXTTdONnMzdElQeXFPRnc9PQ==--ea1416050ead66a4fa8b2a0e42eb8216f0e6b614%)](https://automate.browserstack.com/public-build/R0F2QVZ6NnFLeDBnQ3Y1aXZoR213Mk9QVUFtU2c4b1NuV3dHQ3lmaXhlYz0tLUJXU3JNUkpXTTdONnMzdElQeXFPRnc9PQ==--ea1416050ead66a4fa8b2a0e42eb8216f0e6b614%)

## Setup
* Clone the repo
* Install dependencies `composer install`
* In order to run the tests on BrowserStack you need to update the test files at "tests/*Test.php" with your BrowserStack username and access key. 

## Running the test

* Sequential run
```bash
./vendor/bin/phpunit tests/
```
* Parallel runs using Paratest
```bash
./vendor/bin/paratest tests/
```

## Notes
* You can view your test run on the [Automate Dashboard](https://automate.browserstack.com/dashboard/v2/).

## Next Steps
- BrowserStack's [Capabilities Generator](https://www.browserstack.com/automate/capabilities) for various OS and browser combinations including mobile devices.
- [REST API](https://www.browserstack.com/automate/rest-api)
- Popular [CI/CD Configs](https://www.browserstack.com/docs/automate/selenium#run-tests-from-your-cicd-pipelines)
