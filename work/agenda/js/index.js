var search = document.getElementById('input-text-search');
var forms = document.getElementsByTagName('form');
var table = document.getElementsByTagName('table')[0];
var thItems = document.getElementsByTagName('th');
var tdItems = document.getElementsByTagName('td');
var items = [[]];
if(window.localStorage.getItem('items')!=null){
  let storageItems = window.localStorage.getItem('items').split(',');
  Array.prototype.slice.call(table.children[0]).forEach(function(element){
    element.firstElementChild.style.display = 'table-row';
  });
  for (var i = 0; i < storageItems.length; i+=2) {
    items.push([storageItems[i], storageItems[i+1]]);
    updateTable([storageItems[i], storageItems[i+1]]);
  }
}else{
  console.log('Nullo');
}

for (var i = 0; i < thItems.length; i++) {
  items[0][i] = thItems[i].textContent;
}

forms[0].addEventListener('submit', submitEvent);
forms[1].addEventListener('submit', submitEvent);
forms[0].addEventListener('keypress', typingSearchEvent);
forms[0].addEventListener('keyup', typeUpEvent);

reloadTable();

document.addEventListener('DOMContentLoaded' ,function(){
  for (var i = 0; i < document.forms.length; i++) {
    document.forms[i].reset();
  }
});

for(let i = 2; i < forms[0].children.length; i+=3){
  forms[0].children[i].addEventListener('change', changeFilter);
}

function reloadTable(){
  if(items.length === 1){
    table.children[0].firstElementChild.style.display = 'none';
    document.getElementById('no-items').style.display = 'block';
    console.log('somente 1');
  }else{
    table.children[0].firstElementChild.style.display = 'table-row';
    document.getElementById('no-items').style.display = 'none';
  }
}

function typeUpEvent(e){
  if(e.key == 'Backspace'){
    typingSearchEvent(e);
  }
}

function typingSearchEvent(e){
  let found = false;
  let tr = document.getElementsByTagName('tr');
  let input = forms[0].children[0].value+e.key;
  if(e.key == 'Backspace'){
    input = input.substring(0, input.length - 'Backspace'.length);
  }
  console.log(input);
  for(let i = 1; i < tr.length ; i++){
    if( tr[i].children[0].textContent.indexOf(input) != -1 ||
    tr[i].children[1].textContent.indexOf(input) != -1){
      tr[i].style.display = 'table-row';
      found = true;
    }else{
      tr[i].style.display = 'none';
    }
  }
  if(!found){
    tr[0].style.display = 'none';
    document.getElementById('no-items').style.display = 'block';
  }else{
    tr[0].style.display = 'table-row';
    document.getElementById('no-items').style.display = 'none';
  }
}

function submitEvent(e){
  e.preventDefault();
  if(e.target.id === 'register-form'){
    registerItem(e.target);
  }
}

function registerItem(form){
  var found = false;
  for (var i = 1; i < items.length; i++) {
    if(items[i][0] === form[0].value){
      found = true;
    }
    if(items[i][1] === form[1].value){
      found = true;
    }
  }
  if(!found){
    items.push([form[0].value, form[1].value]);
    storageRegister(items);
    updateTable([form[0].value, form[1].value]);
  }else {
    alert('Nome e/ou número de contato já estão cadastrados!');
  }
}

function updateTable(form){
  // console.log(form);
  let tr = document.createElement('tr');
  let td = document.createElement('td');
  let content = document.createElement('button');
  td.appendChild(document.createTextNode(form[0]));
  tr.appendChild(td);
  td = document.createElement('td');
  td.appendChild(document.createTextNode(form[1]));
  tr.appendChild(td);
  td = document.createElement('td');
  content.setAttribute('type','button');
  content.setAttribute('class','update-btn');
  content.textContent = 'Atualizar';
  content.addEventListener('click', function(event) {
    let item = event.target.parentElement.parentElement;
    let rows = document.getElementsByTagName('tr');
    let newName = forms[1].firstElementChild.nextElementSibling.value;
    let newNumber = forms[1].firstElementChild.nextElementSibling
    .nextElementSibling.nextElementSibling.nextElementSibling.value;
    let line = 1;
    let found = false;
    for(let i = 1; i < rows.length ; i++){
      if(item != rows[i]){
        console.log();
        if(newName == rows[i].firstElementChild.textContent){
          found = true;
          break;
        }if(newNumber == rows[i].firstElementChild
          .nextElementSibling.textContent){
          found = true;
          break;
        }
      }else{
        line = i;
      }
    }
    if(newName == 0 && newNumber == 0){
      alert('Nome e/ou número de contato estão em branco!');
    }else{
      if(!found){
        if(newName != 0){
          item.firstElementChild.textContent = newName;
          items[line][0] = newName;
        }
        if(newNumber != 0){
          item.firstElementChild.nextElementSibling.textContent = newNumber;
          items[line][1] = newNumber;
        }
        storageRegister(items);
      }else{
        alert('Nome e/ou número de contato já estão cadastrados!');
      }
    }
  });
  td.appendChild(content);
  tr.appendChild(td);
  td = document.createElement('td');
  content = document.createElement('button');
  content.setAttribute('type','button');
  content.setAttribute('class','remove-btn');
  content.textContent = 'Remover';
  content.addEventListener('click', function(event) {
    let item = event.target.parentElement.parentElement;
    let rows = document.getElementsByTagName('tr');
    for(let i = 0; i < rows.length ; i++){
      if(rows[i] == item){
        items.splice(i,1);
        console.log(items);
        if(items.length == 1)
          window.localStorage.removeItem('items');
        else
          storageRegister(items);
        item.parentElement.removeChild(item);
        let couting = document.getElementById('counting');
        counting.innerHTML = 'Há '+(items.length - 1)+' contatos cadastrados';
        reloadTable();
      }
    }
  });
  td.appendChild(content);
  tr.appendChild(td);
  table.lastElementChild.appendChild(tr);
  reloadTable();
  let couting = document.getElementById('counting');
  counting.innerHTML = 'Há '+(items.length - 1)+' contatos cadastrados';
}
