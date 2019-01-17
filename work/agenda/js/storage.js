function storageRegister(items){
  console.log(items.slice(1));
  window.localStorage.removeItem('items');
  window.localStorage.setItem('items', items.slice(1));
}
