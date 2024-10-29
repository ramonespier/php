const a = document.createElement('a');
a.innerHTML = 'Enviar'
a.classList = 'enviar'

document.querySelector('.section-form').appendChild(a);

const span = document.createElement('span')
span.classList = 'span'
span.textContent = 'Faça seu cadastro'
document.querySelector('.section-form').appendChild(span);

function linkA() {
    a.href = './processa-login.php';
}

const senha = document.querySelector('#senha')
const confirma = document.querySelector('#confirma')

function submit() {

    while (confirma !== senha) {
        span.textContent = 'senhas nao conferem'
        break

    }
    while(confirma === senha) {
        span.textContent = 'Senhas conferem!'
        break
    }

    // document.addEventListener('keydown', function (event) {
    // if (event.key === 'Enter') {
    //     if (confirma === senha) {
    //         span.textContent = 'Senhas conferem!';
    //         linkA();
    //     }

    // } else {
    //     
    // }
    // })
}

submit()


// function naoSubmit() {
//     document.addEventListener('keydown', function (event) {
//         if (confirma !== senha) {

//         }
//     })
// }


