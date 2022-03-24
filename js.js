var string;
var namee;
var country;
var city;
var number;

function Show(x) {
    document.getElementById('Home').style.display = 'none';
    document.getElementById('Data').style.display = 'none';
    document.getElementById('Table').style.display = 'none';
    document.getElementById('Mission').style.display = 'none';
    document.getElementById('Contact').style.display = 'none';
    document.getElementById(x).style.display = 'block';
}

function Type() {
    namee = document.getElementById('1');
    country = document.getElementById('2');
    city = document.getElementById('3');
    number = document.getElementById('4');
    if (namee.value == '' || country.value == '' || city.value == '' || number.value == '' || number.value < 0) {
        document.getElementById('sub').disabled = true;
    } else
        document.getElementById('sub').disabled = false;
}