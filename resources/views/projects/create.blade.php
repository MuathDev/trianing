<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
</head>
<body>
    
   <h1>Create neaw project</h1>
    <form action="/projects" method="POST">
        
        @csrf
       <div>
           <input type="text" name="title" placeholder=" poject title">
       </div>

       <div>
           <textarea name="description" id="" cols="30" rows="10" placeholder="project description"></textarea>
       </div>

       <div>
           <button type="submit">Create project</button>
       </div>
    </form>
</body>
</html>