
const btnBid = document.querySelector('#btn-bid');
const priceBid = document.querySelector('#price-detail');
const priceBidShow = document.querySelector('#price-detail-show').innerText;
const notiP = document.querySelector('#noti-alert');

priceBid.onkeyup = function () {
    if (btnBid) {
        pBids =  Number(priceBidShow.replace('$',''));
        console.log(typeof Number(priceBid.value));
        if (Number(priceBid.value) < pBids) {
            btnBid.setAttribute('disabled','');
            notiP.classList.add('active');
        }else {
            btnBid.removeAttribute('disabled');
            notiP.classList.remove('active');
        }
    }
}
