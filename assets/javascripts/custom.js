// document.addEventListener('DOMContentLoaded', function() {
//     document.getElementById('headUs').addEventListener('click', function() {
//         document.getElementById('scrollUs').scrollIntoView({ behavior: 'smooth' });
//     });
// });

// ヘッダークリック時各セクション移動
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('headUs').addEventListener('click', function() {
        document.getElementById('scrollUs').scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('headBusines').addEventListener('click', function() {
        document.getElementById('scrollBusines').scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('headRecruit').addEventListener('click', function() {
        document.getElementById('scrollRecruit').scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('headCompany').addEventListener('click', function() {
        document.getElementById('scrollCompany').scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('headNews').addEventListener('click', function() {
        document.getElementById('scrollNews').scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('headContact').addEventListener('click', function() {
        document.getElementById('scrollContact').scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('cursour__box').addEventListener('click', function() {
        document.getElementById('wrap__top').scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('cursour__arrow').addEventListener('click', function() {
        document.getElementById('wrap__top').scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('menu').addEventListener('click', function() {
        this.classList.toggle('is-active');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('menu').addEventListener('click', function() {
        document.querySelector('.p-header__navList').classList.toggle('open');
    });

    const elements = document.getElementsByClassName('close');
    for (let i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', function() {
            document.querySelector('.p-header__navList').classList.remove('open');
            document.querySelector('.c-hamburger').classList.toggle('is-active');
        });
    }
});

// カジュアル面談を申し込むボタン押下後問い合わせメニューへ移動
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('interviewButton').addEventListener('click', function() {
        document.getElementById('scrollContact').scrollIntoView({ behavior: 'smooth' });
    });
})

// アコーディオンメニュー
$(function(){
    $('.nav-open').click(function(){
        $('.p-business__itemContentsBox').toggleClass('is-dropdownActive');
        $('.p-business__mark ').toggleClass('is-markActive');
    });
});
