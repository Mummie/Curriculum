<!-- 
	Using everything you have learned and some googling

    Let's play paper rock scissors

    Simulate 2 people playing the best of 7 (gotta win 4)
        - show the results of each "game"

        i.e.

        Game 1:
        Mark - Paper
        Eric - Rock
        Mark Wins [Mark = 1, Eric = 0]

        Game 2:
        Mark - Rock
        Eric - Scissors
        Mark Wins [Mark = 2, Eric = 0]

        etc .....

 -->

<!DOCTYPE html>
<html>
<head></head>
<body>
<p>

    <?php


    // code goes here ...
    $Mark_Score = 0;
    $Eric_Score = 0;
    $rock_paper_decision = array("Rock", "Paper", "Scissor");
    $Mark_Decision = array_rand($rock_paper_decision,1);
    echo $Mark_Decision;
    $Eric_Decision = array_rand($rock_paper_decision,1);
    echo $Eric_Decision;
    
    /*
    Key:
R = Rock
P = Paper
S = Scissors

W = Win
D = Draw
L = Lose
)

R - R	=D
R - P	=L
R - S	=W
P - R	=W
P - P	=D
P - S	=L
S - R	=L
S - P	=W
S - S	=D
*/
if($Mark_Decision == $Eric_Decision){
    echo "Result: Draw";
}


    switch($Mark_Decision){
        case "Rock":
            
        case "Paper":
            
            
    }
    else if($Mark_Decision== "Rock" && $Eric_Decision == "Paper"){
        echo "Result: Lose -1";
        $MarkScore - 1;
        echo $MarkScore;
    }
    else if($user_choice == "Rock" && $Computer == "Scissors"){
        echo "Result: Win + 1";
        $MarkScore + 1;
        echo $MarkScore;
    }
    
    



    ?>
</p>
</body>
</html>