<!DOCTYPE html>
<html>
<head>
    <title>New Employee Submission</title>
</head>
<body>
    <h1>New Employee Submission</h1>
    <p>Name: {{ $employee->name }}</p>
    <p>Education: {{ $employee->education }}</p>
    <p>Experience: {{ $employee->experience }}</p>
    <p>Salary: {{ $employee->salary }}</p>
    <p>Reference: {{ $employee->reference }}</p>
    <p>Address: {{ $employee->address }}</p>
    <p>Mobile: {{ $employee->mobile }}</p>
    <p>Email: {{ $employee->email }}</p>
    <p>Date: {{ $employee->date }}</p>
    <p>Link: {{ $employee->link }}</p>
    <p>Note: {{ $employee->note }}</p>
</body>
</html>
