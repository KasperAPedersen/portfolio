// Changing style of navbar on scroll
function navStyleChange(){
    var nav = document.getElementById("navbar");
    nav.className = (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100 ? ("w3-bar w3-card w3-animate-top w3-white") : (nav.className.replace(" w3-card w3-animate-top w3-white", "")));
}; window.onscroll = function() { navStyleChange(); };

// Showing navbar for smaller devices (phones etc..)
function navIconChange() {
    let x = document.getElementById("smallNav");
    x.className.indexOf("w3-show") == -1 ? x.className += " w3-show" : x.className = x.className.replace(" w3-show", "");
};
/*
document.getElementById("contactBtn").addEventListener('click', () => {
    alert("Contact form is disabled.\nPlease contact me at swoopai@swoopai.dk");
});*/