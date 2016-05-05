        
                <div class="page-header">
                    <h1 class="page_h">Latest Releases</h1>
                </div>
                
                <?php
                    require_once 'php/dbconnect.php';
                    $conn = new mysqli($host, $user, $password, $db);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $q = "SELECT * FROM movies";
                    $result = $conn->query($q);
                    $rows = $result->num_rows;
                    for ($j = 0 ; $j < $rows ; ++$j)
                    {
                        $result->data_seek($j);
                        $row = $result->fetch_array(MYSQLI_ASSOC);
                        
                        echo"<article>
                         <a href=# class='btn'><h2>" .$row['title']."</h2></a>
                    <div class='row'>
                        <div class='group1 col-md-6'><b>Releasing Date –</b>".$row['release_date']."
                        </div>
                        <div class='group2 col-md-6 text-right'>
                            <b>Star Cast –</b>". $row['starcast'].
                        "</div>
                    </div>
                    <hr/>
                    <a href='".$row['image']."'>
                    <img src=".$row['image']." class='img-responsive'/>
                    </a>
                    <br/>
                    
                    <div class='well'>".
                       $row['description'].
                    "</div>
                    <p class='text-right'><a href='https://en.wikipedia.org/wiki/Mukhtiar_Chadha'> Read more. </a></p>
                    <hr/>
                </article>";
            }
            ?>    
