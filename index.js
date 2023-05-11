let btn = document.querySelector('.wrapper__btn') 
let navList = document.querySelector('.navigation')


btn.addEventListener('click', () => {
    navList.classList.toggle('show-list')  
})


// const applicantForm = document.getElementById('form')
// applicantForm.addEventListener('submit', handleFormSubmit)


// const isOn = someCheckboxInput.checked


// function serializeForm(formNode) {
//   const { elements } = formNode

//   const data = Array.from(elements)
//     .map((element) => {
//       const { name, type } = element
//       const value = type === 'checkbox' ? element.checked : element.value

//       return { name, value }
//     })
//     .filter((item) => !!item.name)
  
//   console.log(data)
// }

const url = 'https://jsonplaceholder.typicode.com/todos/1';

fetch(url).then(data => {
return data.json();
}).then(data => {
  console(log)(data)
})











            
    

  
