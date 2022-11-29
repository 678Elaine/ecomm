const product_form = document.getElementById("product_form");

function check(){
    let correct = true;

    const name = product_form.elements['title'].value;
    const price = product_form.elements['price'].value;
    

    
    if(!isNaN(name)){
        correct = false;
        document.getElementById('name_error').innerHTML = "Please check value";
        document.getElementById('name_error').style.color = "red";
    }

    if(isNaN(price) || price == ""){
        correct = false;
        document.getElementById('price_error').innerHTML = "Invalid Input";
        document.getElementById('price_error').style.color = "red";
    }

    return correct;
}
