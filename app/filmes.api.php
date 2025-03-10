<?php



require_once "connection.php";

//--------------------------------------------------------------------------------------------------------

// Adicionar name à base de dados


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $name = "";
            $name_err = "";

            if (empty(trim($_POST["name"]))) {
                $name_err = "Please enter a film name.";
            } elseif (!preg_match('/^.+$/', trim($_POST["name"]))) {
                $name_err = "Name can only contain letters, numbers, spaces, and underscores.";
            } else {
                $name = trim($_POST["name"]);

                $sql = "INSERT INTO filmes (id, name) VALUE ('', ?)";

                if ($stmt = mysqli_prepare($link, $sql)) {
                    
                    mysqli_stmt_bind_param($stmt, "s", $param_name);

                    $param_name = $name;

                    if (mysqli_stmt_execute($stmt)) {
                        header("location: welcome.admin.php");
                        exit();
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                        echo "Error: " . mysqli_stmt_error($stmt);
                    }
                    
                    mysqli_stmt_close($stmt);
                }
            }
        }


//---------------------------------------------------------------------------------------------

// Criar as divs

        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        $sql = "SELECT name FROM filmes";
        $result = mysqli_query($link, $sql);
        
        if ($result === false) {
            die("Error: " . mysqli_error($link));
        }
        
        $names = [];
        
        while ($row = mysqli_fetch_assoc($result)) {
            $names[] = $row['name'];
        }
        
?>