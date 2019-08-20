<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8"/>
    <title> Title </title>

</head>


<body>
    <?php
        class Artist
        {
            private $name;
            private $dateOfBirth;
            private $dateOfDeath;
            private $birthplace;

            public function __set($name, $value)
            {
                $this->$name = $value;
            }
            public function __get($name)
            {
                return $this->$name;
            }

            public function __construct($name, $dateOfBirth, $dateOfDeath=null, $birthplace)
            {
                $this->name = $name;
                $this->dateOfBirth = $dateOfBirth;
                $this->dateOfDeath = $dateOfDeath;
                $this->birthplace = $birthplace;
            }

            public function shfaq()
            {
                echo "<table border='1'>
                    <tr>
                        <th colspan='2'> $this->name </th>
                    </tr>
                    <tr>
                        <td> Birth: </td>
                        <td> $this->dateOfBirth ($this->birthplace) </td>
                    </tr>
                    <tr>
                        <td> Death: </td>
                        <td> $this->dateOfDeath </td>
                    </tr>
                </table>";
            }
        }

        $objekti = new Artist("Pablo Picasso","Oct 25, 1881", "Apr 8, 1973", "Malaga");
        $objekti->shfaq();

        echo "<br />";
        $objekti = new Artist("Salvador Dali","May 11, 1904", "Jan 23, 1989", "Figures");
        $objekti->shfaq();


    ?>

</body>


</html>