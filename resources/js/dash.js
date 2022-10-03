/* Dashboard */

document.getElementById('services').addEventListener("click", function(e){
    document.getElementById("hidden-serv").classList.toggle("hidden");
    document.getElementById("hidden-serv").classList.toggle("hidden-serv");
});

document.getElementById('projects').addEventListener("click", function(e){
    document.getElementById("hidden-proj").classList.toggle("hidden");
    document.getElementById("hidden-proj").classList.toggle("hidden-proj");
});

document.getElementById('customers').addEventListener("click", function(e){
    document.getElementById("hidden-cust").classList.toggle("hidden");
    document.getElementById("hidden-cust").classList.toggle("hidden-proj");
});

document.querySelector('.btn-s').addEventListener("click", function(e){
    document.getElementById("file-s").classList.toggle("hidden");
    document.getElementById("img-s").classList.toggle("hidden");
    // document.getElementById("hidden-cust").classList.toggle("hidden-proj");
});