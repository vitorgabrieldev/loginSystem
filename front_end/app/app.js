// ================= Auto text =====================================
const title = document.querySelector('#autoText1');
const title2 = document.querySelector('#autoText2');
typeWriter(title);
typeWriterMsg(title2);

function typeWriter(title) {
    let textArray = title.innerHTML.split('');
    title.innerHTML = '';

    textArray.forEach((letter, i) => {
        setTimeout(() => title.innerHTML += letter, 85 * i);
    });
};

function typeWriterMsg(title2) {
    let textArray = title2.innerHTML.split('');
    title2.innerHTML = "";

    setTimeout(() => {
        textArray.forEach((letter, i) => {
            setTimeout(() => title2.innerHTML += letter, 35 * i);
        });    
    }, 1575 );

};