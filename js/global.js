// Header Up //
const btn = document.querySelector('.btn');

btn.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })

})

const loader = document.querySelector('.loader');

window.addEventListener('load', () => {

    loader.classList.add('fondu-out');

})

// Mises à Jour //
const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));

//Année Emissions //
const buttons = document.querySelectorAll(".bouton");

buttons.forEach(function (i) {
  i.addEventListener("click", affichManipul);
});

function affichManipul(e) {
  e.target.parentNode.parentNode.classList.toggle("show-text");
}

jQuery(function($) {
    if (typeof _userdata.page_desktop === "undefined") {
        var m = $('.bandef'),
            w = 0,
            cw = m.parent().add('<span />').width(),
            st = 'y';
        if (navigator.userAgent.match(/MSIE/) || navigator.userAgent.match(/rv:11\.0/) || navigator.userAgent.match(/maxthon/i) || (navigator.userAgent.match(/Safari/) && !navigator.userAgent.match(/Chrome/))) {
            if (st == 'y') {
                m.attr({
                    'onmouseover': 'this.stop();',
                    'onmouseout': 'this.start();'
                });
            }
            m.attr('direction', 'left').removeAttr('class').parent().html(m.parent().html().replace(/div/g, 'marquee'));
        }
        m.css('max-width', cw + 'px').fadeIn().closest('td.row1').css('padding', '2px 0');
        $('.bandef img, .bandef span').each(function() {
            w = w + parseInt($(this).add('<span />').width());
        });
        if ($('.bodylinewidth').length != 0) $('.bandef').each(function() {
            if ($(this).parent().is('div.gensmall')) w = w + cw;
        });
        $('head').append('<style id="marquee_style">@-webkit-keyframes marquee { 0%  { text-indent: ' + cw + 'px } 100% { text-indent: -' + w + 'px } } @keyframes marquee { 0%  { text-indent: ' + cw + 'px } 100% { text-indent: -' + w + 'px } }</style>');
        if (st == 'n') {
            $('#marquee_style').append('.bandef:hover{ -webkit-animation-play-state: initial !important; animation-play-state: initial !important }');
        }
    }
});