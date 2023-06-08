// function createGame(player1, nome1, hour, player2, nome2) {
//   return `
//     <li>
//       <div>
//         <img src="./assets/icon-${player1}.svg" alt="Bandeira do ${nome1}">
//         <h3>${nome1}</h3>
//       </div>
//       <strong>${hour}</strong>
//       <div>
//         <img src="./assets/icon-${player2}.svg" alt="Bandeira da ${nome2}">
//         <h3>${nome2}</h3>
//       </div>
//     </li>
//   `;
// }

// let delay = -0.3;
// function createCard(date, day, games) {
//   delay = delay + 0.3;
//   return `
//   <div class="card" style="animation-delay: ${delay}s">
//     <h2>${date} <span>${day}</span></h2>
//     <ul>
//       ${games}
//     </ul>
//   </div>
//   `;
// }

// document.querySelector('#cards').innerHTML =
//   createCard(
//     '24/11',
//     'quinta',
//     createGame('uruguai', 'Uruguai', '10:00', 'coreadosul', 'Corea') +
//       createGame('portugal', 'Portugal', '13:00', 'gana', 'Gana') +
//       createGame('brasil', 'Brasil', '16:00', 'servia', 'Sérvia'),
//   ) +
//   createCard(
//     '28/11',
//     'segunda',
//     createGame('coreadosul', 'Corea', '10:00', 'gana', 'Gana') +
//       createGame('brasil', 'Brasil', '13:00', 'suica', 'Suiça') +
//       createGame('portugal', 'Portugal', '16:00', 'uruguai', 'Uruguai'),
//   ) +
//   createCard(
//     '02/12',
//     'sexta',
//     createGame('coreadosul', 'Corea', '12:00', 'portugal', 'Portugal') +
//       createGame('gana', 'Gana', '12:00', 'uruguai', 'Uruguai') +
//       createGame('camaroes', 'Camarões', '16:00', 'brasil', 'Brasil'),
//   );