var animateButton = function (e) {

    e.preventDefault;
    //reset animation
    e.target.classList.remove('animate');

    e.target.classList.add('animate');
    setTimeout(function () {
        e.target.classList.remove('animate');
    }, 700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
    bubblyButtons[i].addEventListener('click', animateButton, false);
}


//mouse
const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
    cursor.setAttribute("style", "top: " + (e.pageY - 10) + "px; left: " + (e.pageX - 10) + "px;")
});

document.addEventListener('click', e => {
    cursor.classList.add("expand");
    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 500);
});



///
// 対象の要素を取得
const paragraph = document.querySelector(".js-text");

// テキストコンテンツを取得
const textContent = paragraph.textContent;

// テキストコンテンツを一文字ずつ分割して<span>タグで囲んで新しい文字列を作成
const newTextContent = [...textContent]
    .map((char) => `<span>${char}</span>`)
    .join("");
// 新しい文字列をHTMLに挿入
paragraph.innerHTML = newTextContent;

gsap.fromTo(
    ".js-text span", // アニメーションさせる要素
    {
        autoAlpha: 0, // アニメーション開始前は透明
        y: -100, // 100px上に移動
    },
    {
        autoAlpha: 1, // アニメーション後は出現(透過率0)
        y: 0, // 100px下に移動
        repeat: -1, // リピート無限
        repeatDelay: 1.2, // 1.2秒遅れでリピート
        stagger: 0.2, // 0.2秒遅れて順番に再生
        ease: "bounce.out", // イージング
    }
);
////
var options = {
    imgSrc: "./img/siki.jpg",
    containerName: "placeholder",
    rows: 5,
    columns: 5,
    margin: 2.5,
    animTime: 0.3
}

function ImageGrid(defaults) {
    var r = defaults.rows;
    var c = defaults.columns;
    var margin = defaults.margin;

    var placeholder = document.getElementsByClassName(defaults.containerName)[0];
    var container = document.createElement('div');
    container.className = "gridContainer";
    placeholder.appendChild(container);

    var gridTile;

    var w = (container.offsetWidth / c) - margin;
    var h = (container.offsetHeight / r) - margin;
    var arr = [];

    for (var i = 0, l = r * c; i < l; i++) {
        gridTile = document.createElement('div');
        gridTile.className = "gridTile";
        gridTile.style.backgroundImage = "url(" + defaults.imgSrc + ")";


        arr = [(w + margin) * (i % c), (h + margin) * Math.floor(i / c), ((w + margin) * (i % c) + w - margin), (h + margin) * Math.floor(i / c), ((w + margin) * (i % c) + w - margin), ((h + margin) * Math.floor(i / c) + h - margin), (w + margin) * (i % c), ((h + margin) * Math.floor(i / c) + h - margin)];

        // console.log(i + " ====>>> " + arr + " ||||| " + i%c  + " |||||| " + i/c);


        TweenMax.set(gridTile, { webkitClipPath: 'polygon(' + arr[0] + 'px ' + arr[1] + 'px,' + arr[2] + 'px ' + arr[3] + 'px, ' + arr[4] + 'px ' + arr[5] + 'px, ' + arr[6] + 'px ' + arr[7] + 'px)', clipPath: 'polygon(' + arr[0] + 'px ' + arr[1] + 'px,' + arr[2] + 'px ' + arr[3] + 'px, ' + arr[4] + 'px ' + arr[5] + 'px, ' + arr[6] + 'px ' + arr[7] + 'px)' });

        container.appendChild(gridTile);

        fixTilePosition(gridTile, i);
    }

    placeholder.addEventListener("mouseover", function (e) {
        var allTiles = e.currentTarget.querySelectorAll(".gridTile");
        for (var t = 0, le = allTiles.length; t < le; t++) {
            TweenMax.to(allTiles[t], defaults.animTime, { css: { backgroundPosition: "0px 0px" }, ease: Power1.easeOut });
        }
    })

    placeholder.addEventListener("mouseleave", function (e) {
        var allTiles = e.currentTarget.querySelectorAll(".gridTile");
        for (var ti = 0, len = allTiles.length; ti < len; ti++) {
            fixTilePosition(allTiles[ti], ti, defaults.animTime);
        }
    })

    function fixTilePosition(tile, ind, time) {
        if (time == null) time = 0;
        var centr, centrCol, centrRow, offsetW, offsetH, left, top;

        centr = Math.floor(c * r / 2);
        centrCol = Math.ceil(centr / c);
        centrRow = Math.ceil(centr / r);

        offsetW = w / centrCol;
        offsetH = h / centrRow;

        left = (Math.round((ind % c - centrCol + 1) * offsetW));
        top = (Math.round((Math.floor(ind / c) - centrRow + 1) * offsetH));

        //console.log(left, top)

        TweenMax.to(tile, time, { css: { backgroundPosition: left + "px " + top + "px" }, ease: Power1.easeOut });
    }
}

ImageGrid(options);