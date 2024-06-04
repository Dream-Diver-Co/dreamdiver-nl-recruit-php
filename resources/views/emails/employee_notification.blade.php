<!DOCTYPE html>
<html>
<head>
    <title>New Employee Submission</title>
</head>
<body>
    <h1>New Employee Submission</h1>

    <p>Name : {{ $employee->name }}</p>
    <p>Email : {{ $employee->email }}</p>
    <p>Contact information : {{ $employee->mobile }}</p>
    <p>date : {{ $employee->date }}</p>
    <p>company culture : {{ $employee->note }}</p>
</body>
</html>
