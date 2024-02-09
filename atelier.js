//exercice 1
function calcul(x, y) 
{
    var pi = 3.14;
    if (x > 0)
    {
        return (x + y) * pi;
    }
    
    else
    {
        return y * pi;
    }
}
    
////////////////////////////////////////////
//exercice 2
function numparfait(n)
{
    //let i=2;
    for (let i=2;i<n;i++)
    {
        let count=0;
        for (let j=1;j<i;j++)
        { 
            if ((i%j)===0)
            {
                count=count+j;
            }
        }
        if (count===i)
        {
            console.log(i );
        }

    }
}
////////////////////////////////////////////////////
//exercice 3
function fusion(ch1,ch2){

    let list=[];
    for(let char1 of ch1){
        for(let char2 of ch2){
            list.push(char1+char2);
        }
    }
    console.log(list);
    }
///////////////////////////////////////////////////
//exercice 4
function tableau(T)
{

    T.sort((a,b)=>a-b);
    console.log("tableau trié",T);
    T.push(12);
    console.log(T);
    T.reverse();
    console.log("tableau inversé",T);
    console.log("indice de l'élement 17",T.indexOf(17));
    
    T.splice(T.indexOf(38),1);
    console.log("tableau avec suppression de l'élement 38",T);
    let T1 = T.slice(1,3);
    console.log("sous-tableau 1",T1);
    let T2 = T.slice(0,2);
    console.log("sous-tableau 2",T2);
    let T3 = T.slice(2);
    console.log("sous-tableau 3",T3);
}
////////////////////////////////////////////
//exercice 5
function entierAleatoire(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    let num=entierAleatoire(0,10);
    //let num = 3;
    let essais = 3 ;

    while(essais > 0 )
    {
        let choix = parseInt(prompt("Donner un nombre entre 0 et 10"));
        if(choix === num)
        {
            alert("Bravo!");
            break;
        } 
        else
        { essais--; 
            alert("Incorrect ! il vous reste"+essais+"essais");
        }
    }
    if (essais === 0)
    alert("Vous avez epuisé tous vos essais !");
////////////////////////////////////////////////////
//exercice 6

    
    
