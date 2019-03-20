<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
    <link href = {{ asset("css/customCss.css") }} rel="stylesheet" />
    <link href = {{ asset("js/app.js") }} rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    
    <title>Edit</title>
</head>
<body>
    <div class="container-fluid">
        <form method="POST" action="{{ route('patients.update', $patient)}}">
            @csrf
            @method('PATCH')
                <table class="table table-striped table-bordered">
                    <tr class="table-info font-weight-bold">
                            <td>NAME</td>
                            <td>LASTNAME</td>
                            <td>SVNR</td>
                            <td>BOSS</td>
                            <td>STREET</td>
                            <td>TOWN</td>
                            <td>1. DATE</td>
                            <td>2. DATE</td>
                            <td>3. DATE</td>
                            <td>4. DATE</td>
                            <td>5. DATE</td>
                            <td>6. DATE</td>
                            <td>7. DATE</td>
                            <td>8. DATE</td>
                            <td>9. DATE</td>
                            <td>10. DATE</td>
                            <td>BILL NBR.</td>
                            <td>UPDATE</td>
                        </tr>
                    <tr>
                        <td><input type="text" name="name" value="{{$patient->name}}"</td>
                        <td><input type="text" name="lastname" value="{{$patient->lastname}}"</td>
                        <td><input type="text" name="svnr" value="{{$patient->svnr}}"</td>
                        <td><input type="text" name="boss" value="{{$patient->boss}}"</td>
                        <td><input type="text" name="street" value="{{$patient->street}}"</td>
                        <td><input type="text" name="town" value="{{$patient->town}}"</td>
                        <td><input type="text" name="date1" value="{{$patient->date1}}"</td>
                        <td><input type="text" name="date2" value="{{$patient->date2}}"</td>
                        <td><input type="text" name="date3" value="{{$patient->date3}}"</td>
                        <td><input type="text" name="date4" value="{{$patient->date4}}"</td>
                        <td><input type="text" name="date5" value="{{$patient->date5}}"</td>
                        <td><input type="text" name="date6" value="{{$patient->date6}}"</td>
                        <td><input type="text" name="date7" value="{{$patient->date7}}"</td>
                        <td><input type="text" name="date8" value="{{$patient->date8}}"</td>
                        <td><input type="text" name="date9" value="{{$patient->date9}}"</td>
                        <td><input type="text" name="date10" value="{{$patient->date10}}"</td>
                        <td><input type="text" name="billnumber" value="{{$patient->billnumber}}"</td>
                        <td class="centerBtn"><button type="submit" class="btn btn-primary"><i class="fa fa-sync"></i></button></td>
                    </tr>
                </table>
        </form>
    </div>
</body>
</html>