let fun = document.querySelector("button"),
    cart = document.querySelector(".cart"),
    profile = document.querySelector(".profile"),
    img = document.querySelector("img");

fun.addEventListener("click", ()=>{
    cart.classList.remove("hide");
    profile.classList.remove("hide");
    fun.classList.add("hide");
});

function ani() {
    setTimeout(()=>{
        img.classList.add("llg");
        img.style.opacity =1;
    },7000);
}
ani();