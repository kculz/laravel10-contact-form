<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>

    @if (Session::has('success'))
        <p>{{Session::get('success')}}</p>
    @endif

    @if (Session::has('error'))
        <p>{{Session::get('error')}}</p>
    @endif
    
    <form action="{{route('contact.send')}}" method="POST">
        @csrf
        @method('POST')
        <label for="">Name:</label>
        <input type="text" name="name" id="">
        <label for="">Subject:</label>
        <input type="text" name="subject" id="">
        <label for="">Email</label>
        <input type="email" name="email" id="">
        <textarea name="message" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>