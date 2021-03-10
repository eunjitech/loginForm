const form = document.querySelector('form');

function handleForm(e) {
    e.preventDefault();
    const id = document.querySelector('#user-id');
    const pw = document.querySelector('#user-pw');
    const span = document.querySelector('.js-alert');
    if (!id.value) {
        span.innerText = '🚫아이디를 입력해주세요';
        span.classList.add('alert');
    }
    else if (!pw.value) {
        span.innerText = '🚫비밀번호를 입력해주세요';
        span.classList.add('alert');
    }
    form.submit();
}

function init() {
    form.addEventListener('submit', handleForm);
};

init();