// Получаем элемент с id "office-role"
const roleElement = document.getElementById("office-role");

// Проверяем, является ли содержимое элемента равным "Роль: Самозанятый"
if (roleElement.innerHTML === "Роль: Заказчик") {
  // Если да, то находим все элементы с классом "delete"
  const deleteElements = document.getElementsByClassName("delete");

  // Проходимся по каждому элементу с классом "delete" и присваиваем им атрибут "display: none"
  for (let i = 0; i < deleteElements.length; i++) {
    deleteElements[i].style.display = "none";
  }
}