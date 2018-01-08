/**
 * Pieces Theme character map JS
 */
if (storageHostURL) {
    // create array with image items
    var imageArray = [
        storageHostURL + '/source/1/characterImageMap/0.png',
        storageHostURL + '/source/1/characterImageMap/1.png',
        storageHostURL + '/source/1/characterImageMap/2.png',
        storageHostURL + '/source/1/characterImageMap/3.png',
        storageHostURL + '/source/1/characterImageMap/4.png',
        storageHostURL + '/source/1/characterImageMap/5.png',
        storageHostURL + '/source/1/characterImageMap/6.png',
        storageHostURL + '/source/1/characterImageMap/7.png',
        storageHostURL + '/source/1/characterImageMap/8.png',
        storageHostURL + '/source/1/characterImageMap/9.png',
        storageHostURL + '/source/1/characterImageMap/10.png',
        storageHostURL + '/source/1/characterImageMap/11.png',
        storageHostURL + '/source/1/characterImageMap/12.png',
        storageHostURL + '/source/1/characterImageMap/13.png',
    ];

    // character page image map
    Image0 = new Image(800, 800);
    Image0.src = storageHostURL + '/source/1/characterImageMap/0.png';

    Image1 = new Image(800, 800);
    Image1.src = storageHostURL + '/source/1/characterImageMap/1.png';

    Image2 = new Image(800, 800);
    Image2.src = storageHostURL + '/source/1/characterImageMap/2.png';

    Image3 = new Image(800, 800);
    Image3.src = storageHostURL + '/source/1/characterImageMap/3.png';

    Image4 = new Image(800, 800);
    Image4.src = storageHostURL + '/source/1/characterImageMap/4.png';

    Image5 = new Image(800, 800);
    Image5.src = storageHostURL + '/source/1/characterImageMap/5.png';

    Image6 = new Image(800, 800);
    Image6.src = storageHostURL + '/source/1/characterImageMap/6.png';

    Image7 = new Image(800, 800);
    Image7.src = storageHostURL + '/source/1/characterImageMap/7.png';

    Image8 = new Image(800, 800);
    Image8.src = storageHostURL + '/source/1/characterImageMap/8.png';

    Image9 = new Image(800, 800);
    Image9.src = storageHostURL + '/source/1/characterImageMap/9.png';

    Image10 = new Image(800, 800);
    Image10.src = storageHostURL + '/source/1/characterImageMap/10.png';

    Image11 = new Image(800, 800);
    Image11.src = storageHostURL + '/source/1/characterImageMap/11.png';

    Image12 = new Image(800, 800);
    Image12.src = storageHostURL + '/source/1/characterImageMap/12.png';

    Image13 = new Image(800, 800);
    Image13.src = storageHostURL + '/source/1/characterImageMap/13.png';

    /**
     * Swap the DOM.character.src value
     */
    function show(num) {
        var imageMap = document.querySelector('article.article-item > p >img');
        imageMap.src = imageArray[num];
        console.log(imageMap.src);
        return true;
    }
}
