// Получаем элемент с id "error-alert"
const roleElement = document.getElementById("error-alert");

// Проверяем, не является ли содержимое элемента пустотой
if (roleElement.innerHTML !== "") {
  // Если да, то находим все элементы с классом "error-alert"
  const deleteElements = document.getElementsByClassName("error-alert");

  // Проходимся по каждому элементу с классом "error-alert" и присваиваем им атрибут "display: block"
  for (let i = 0; i < deleteElements.length; i++) {
    deleteElements[i].style.display = "block";
  }
}