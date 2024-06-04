<!DOCTYPE html>
<html>
<head>
    <title>New Posted Job Submission</title>
</head>
<body>
    <h1>New Posted Job Submission</h1>

    <p>Name:{{ $student->name }}</p>
    <p>Email:{{ $student->email }}</p>
    <p>Phone:{{ $student->mobile }}</p>
    <p>Address:{{ $student->address }}</p>
    <p>Date:{{ $student->date }}</p>
    <p>Protfolio Link:{{ $student->link }}</p>
    <p>Comment:{{ $student->note }}</p>
</body>
</html>
