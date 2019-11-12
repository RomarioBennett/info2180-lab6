<?php


#$query = $_GET['q'];
#$definition =$_GET['w'];
#$all = $_GET['all'];



  
  
  
  


$superheroes = [
  [
      "id" => 1,
      "name" => "Steve Rogers",
      "alias" => "Captain America",
      "biography" => "Recipient of the Super-Soldier serum, World War II hero Steve Rogers fights for American ideals as one of the world’s mightiest heroes and the leader of the Avengers.",
  ],
  [
      "id" => 2,
      "name" => "Tony Stark",
      "alias" => "Ironman",
      "biography" => "Genius. Billionaire. Playboy. Philanthropist. Tony Stark's confidence is only matched by his high-flying abilities as the hero called Iron Man.",
  ],
  [
      "id" => 3,
      "name" => "Peter Parker",
      "alias" => "Spiderman",
      "biography" => "Bitten by a radioactive spider, Peter Parker’s arachnid abilities give him amazing powers he uses to help others, while his personal life continues to offer plenty of obstacles.",
  ],
  [
      "id" => 4,
      "name" => "Carol Danvers",
      "alias" => "Captain Marvel",
      "biography" => "Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.",
  ],
  [
      "id" => 5,
      "name" => "Natasha Romanov",
      "alias" => "Black Widow",
      "biography" => "Despite super spy Natasha Romanoff’s checkered past, she’s become one of S.H.I.E.L.D.’s most deadly assassins and a frequent member of the Avengers.",
  ],
  [
      "id" => 6,
      "name" => "Bruce Banner",
      "alias" => "Hulk",
      "biography" => "Dr. Bruce Banner lives a life caught between the soft-spoken scientist he’s always been and the uncontrollable green monster powered by his rage.",
  ],
  [
      "id" => 7,
      "name" => "Clint Barton",
      "alias" => "Hawkeye",
      "biography" => "A master marksman and longtime friend of Black Widow, Clint Barton serves as the Avengers’ amazing archer.",
  ],
  [
      "id" => 8,
      "name" => "T'challa",
      "alias" => "Black Panther",
      "biography" => "T’Challa is the king of the secretive and highly advanced African nation of Wakanda - as well as the powerful warrior known as the Black Panther.",
  ],
  [
      "id" => 9,
      "name" => "Thor Odinson",
      "alias" => "Thor",
      "biography" => "The son of Odin uses his mighty abilities as the God of Thunder to protect his home Asgard and planet Earth alike.",
  ],
  [
      "id" => 10,
      "name" => "Wanda Maximoff",
      "alias" => "Scarlett Witch",
      "biography" => "Notably powerful, Wanda Maximoff has fought both against and with the Avengers, attempting to hone her abilities and do what she believes is right to help the world.",
  ], 
];

  if ($all)
    {
       header('Content-type: text/xml');
       $xmlContent = SimpleXMLElement($superheroes);
       echo $xmlContent->asXML();  
    }

    else
    {
       print "<h3>" . strtoupper($query) . "</h3>";
       //print "<p>"  . $superheroes[$query]    .   "</p>";
       //print  "<p>" . $superheroes[$definition]."</p>";
       //if ($query =='Captain America'){
         //print $superheroes[0]['bigraphy'];
       //}
       //print "<p>" . $superheroes[$query] . "</p>";
    //}
   



if ($_SERVER['REQUEST_METHOD'] === 'GET'){
  
  if(!isset($_GET['search']) or empty($_GET['search'])){
    //$search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
    
    foreach ($superheroes as $superhero):
    echo $superhero['alias'];
    endforeach;

 
  }else{
    
    //echo $_GET['search'];
    foreach ($superheroes as $superhero){
    if ($query == $superheros['alias'] or $query===$superheroes['name']){
    
    print $superheroes[$query];
  }else{
    echo "Super Hero Not Found";
  }
  }
}
}
}



?>




<ul>
<?php foreach ($superheroes as $superhero): ?>
  <li><?= $superhero['alias']; ?></li>
<?php endforeach; ?>
</ul>

