# PHPUnit tests for BrowserStack
Using Paratest for parallel execution

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
