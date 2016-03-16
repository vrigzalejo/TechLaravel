<!DOCTYPE html>
<html lang="en" ng-app="techTestApp">
<head>
    <meta charset="UTF-8">
    <title>TechTest Application</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>

    <script src="/js/nya-bs-select.min.js"></script>
    <script src="/js/controllers/main.js"></script>
    <script src="/js/services/register.js"></script>
    <script src="/js/services/country.js"></script>
    <script src="/js/app.js"></script>


</head>
<body class="container" ng-controller="RegisterController">
<div class="col-md-8 col-md-offset-2">

    <div class="page-header">
        <h2>TechTest Application</h2>
    </div>

    <form name="registrationForm" ng-submit="submitRegister(registrationForm.$valid)" novalidate>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="personal_id" ng-model="registerData.personal_id"
                   placeholder="Personal Id" ng-pattern="/^[0-9]{7}$/">
            <span class="label label-danger" ng-show="registrationForm.personal_id.$invalid">This fields contains 7 digit numbers</span>
        </div>

        <div class="form-group">
            <input type="text" class="form-control input-lg" name="title" ng-model="registerData.title"
                   placeholder="Title" ng-maxlength="5">
            <span class="label label-danger" ng-show="registrationForm.title.$invalid && registrationForm.title.$dirty">Max of 5 characters</span>
        </div>

        <div class="form-group">
            <input type="text" class="form-control input-lg" ng-required="required" name="first_name"
                   ng-model="registerData.first_name"
                   placeholder="First Name">
            <span class="label label-danger"
                  ng-show="registrationForm.first_name.$invalid && registrationForm.first_name.$dirty">Required</span>
        </div>

        <div class="form-group">
            <input type="text" class="form-control input-lg" name="last_name" ng-model="registerData.last_name"
                   placeholder="Last Name" ng-required="required">
            <span class="label label-danger"
                  ng-show="registrationForm.last_name.$invalid && registrationForm.last_name.$dirty">Required</span>
        </div>

        <label for="citizenship">Sex</label>

        <div class="form-group">
            <div class="radio">
                <label><input name="sex" ng-required="required" type="radio" ng-model="registerData.sex" value="M">Male</label>
            </div>
            <div class="radio">
                <label><input name="sex" ng-required="required" type="radio" ng-model="registerData.sex" value="F">Female</label>
            </div>
            <span class="label label-danger" ng-show="registrationForm.sex.$invalid && registrationForm.sex.$dirty">Required</span>
        </div>

        <label for="citizenship">Citizenship</label>

        <div class="form-group">
            <select class="form-control" name="citizenship" ng-model="registerData.citizenship" ng-required="required">
                <option ng-repeat="option in countries" value="{{ option.country_code }}">{{ option.country_name }}
                </option>
            </select>
            <span class="label label-danger"
                  ng-show="registrationForm.citizenship.$invalid && registrationForm.citizenship.$dirty">Required</span>
        </div>


        <label for="comments">Comments</label>

        <div class="form-group">
            <textarea class="form-control" style="min-width: 100%; height:10em;" name="comments"
                      ng-model="registerData.comments">
            </textarea>
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
</div>
</body>
</html>