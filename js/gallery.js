(function() {
    window.onunload = function(){};

    var parentDiv;

    function makeOnLoad(elem) {
        return function() {
            elem.parentElement.style["background-image"] = "none";
            elem.style["display"] = "inline-block";
        }
    }

    function makeOnClick(elem) {
        return function() {
            showInterstitial(elem);
        }
    }

    function showInterstitial(elem) {
        var frame = elem.querySelector(".frame").cloneNode(true);
        document.querySelector("#interstitial").appendChild(frame);
        document.querySelector("#interstitial").style["opacity"] = "1.0"
        document.querySelector("#fade").style["pointer-events"] = "visible";
        document.querySelector("#fade").style["opacity"] = "1.0";
        document.querySelector(".nav").style["display"] = "none";
    }

    function hideInterstitial() {
        document.querySelector("#interstitial").style["opacity"] = "0.0"
        document.querySelector("#interstitial").removeChild(document.querySelector("#interstitial").children[0]);
        document.querySelector("#fade").style["opacity"] = "0.0";
        document.querySelector("#fade").style["pointer-events"] = "none";
        document.querySelector(".nav").style["display"] = "block";
    }
    var cellContainers = document.getElementsByClassName("cell-content");
    for (var i = 0; i < cellContainers.length; ++i) {
        cellContainers[i].querySelector(".thumbnail").addEventListener("load", makeOnLoad(cellContainers[i]), false)
        //HACK: Fallback behavior for if the load event doesn't happen for
        // some reason. Like in some cases with the back button. Makes sure
        // that images show in 2 seconds.
	setTimeout(makeOnLoad(cellContainers[i]), 2000);
        cellContainers[i].addEventListener("click", makeOnClick(cellContainers[i]), false)
    }
    document.querySelector("#fade").addEventListener("click", hideInterstitial);
    for (var i = 0; i < document.querySelectorAll(".frame").length; ++i) {
      document.querySelectorAll(".frame")[i].addEventListener("click", hideInterstitial);
    }
})();
