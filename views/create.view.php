<?php
     include "./partials/header.view.php";
?>
<body>
    <h1>create form</h1>
   <form action="/store" method="post">
        <input type="text" name="description">
        <input type="checkbox" name="iscompleted" id="">
        <button>create task</button>
    </form>   
    
</body>

<?php
     include "./partials/footer.view.php";
?>