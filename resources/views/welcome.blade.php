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

    
    <title>Welcome</title>
</head>
<body>
    <div class="container-fluid">
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
                <td>EDIT</td>
                <td>DELETE</td>
                <td>COMPLETE</td>
            </tr>
        @foreach ($patients as $patient)
         @if($patient->ready == 1)<tr class="table-success">
         @else<tr>
         @endif
                <td>{{$patient->name}}</td>
                <td>{{$patient->lastname}}</td>
                <td>{{$patient->svnr}}</td>
                <td>{{$patient->boss}}</td>
                <td>{{$patient->street}}</td>
                <td>{{$patient->town}}</td>
                <td>{{$patient->date1}}</td>
                <td>{{$patient->date2}}</td>
                <td>{{$patient->date3}}</td>
                <td>{{$patient->date4}}</td>
                <td>{{$patient->date5}}</td>
                <td>{{$patient->date6}}</td>
                <td>{{$patient->date7}}</td>
                <td>{{$patient->date8}}</td>
                <td>{{$patient->date9}}</td>
                <td>{{$patient->date10}}</td>
                <td>{{$patient->billnumber}}</td>
                <td class="centerBtn"><a href="{{ route('patients.edit', $patient)}}" class="btn btn-primary"><i class="fa fa-edit fa-xs"></i></a></td>
                <td class="centerBtn"><form action="{{ route('patients.destroy', $patient)}}" method="POST"> @method('DELETE') @csrf<button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-xs"></i></button></form></td>
                <td class="centerBtn"><a href="{{ route('filePrint', ['id' => $patient] )}}" class="btn btn-info"><i class="fa fa-check fa-xs"></i></a></td>
            </tr>
        @endforeach
            <tr>
                <td><a href="{{ route('patients.create')}}" class="btn btn-primary sredina">Add Patient</a></td>
            </tr>
        </table>
    </div>
    
</body>
</html>