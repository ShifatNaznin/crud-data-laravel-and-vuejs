let form = require('./components/form').default;
let datatable = require('./components/datatable').default;
let editdata = require('./components/edit-data').default;

export const routes = [
  { path: '/', component: form, name: '/' },
  { path: '/data-table', component: datatable, name: 'data-table' },
  { path: '/edit-data/:id', component: editdata, name: 'edit-data' },
]