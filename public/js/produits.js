const titlefilter = document.querySelectorAll(".title input");
const titlefilterarrow = document.querySelectorAll(".lifilter ul");
const titlefilterarrowrt = document.querySelectorAll(".title div");
for (let i = 0; i < titlefilter.length; i++) {
  titlefilter[i].addEventListener("change", function() {
    let deg;
    if (this.checked) {
      //titlefilterarrow[i].style.display = "none";
      $(titlefilterarrow[i]).animate({ height: "0px" });
      //titlefilterarrowrt[i]
      deg = -135;
      setInterval(function() {
        if (deg <= 45) {
          titlefilterarrowrt[i].style.transform = "rotate(" + deg + "deg)";
          deg += 5;
        } else {
          return;
        }
      }, 10);
    } else {
      // titlefilterarrow[i].style.display = "block";
      $(titlefilterarrow[i]).animate({ height: "160px" });
      deg = 45;
      setInterval(function() {
        if (deg >= -135) {
          titlefilterarrowrt[i].style.transform = "rotate(" + deg + "deg)";
          deg -= 5;
        } else {
          return;
        }
      }, 10);
    }
  });
}

$("#filterhider").click(() => {
  if ($("#filter").css("left") == "0px") {
    $("#filter").animate({ left: "-250px" });
  } else {
    $("#filter").animate({ left: "0px" });
  }
});

