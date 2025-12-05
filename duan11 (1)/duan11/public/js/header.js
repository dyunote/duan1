document.addEventListener('DOMContentLoaded', function () {
  const accountWrapper = document.querySelector('.account-wrapper');
  if (!accountWrapper) return;

  accountWrapper.addEventListener('click', function (e) {
    e.stopPropagation(); 
    accountWrapper.classList.toggle('open');
  });

  document.addEventListener('click', function () {
    accountWrapper.classList.remove('open');
  });
});
