$(function() {
  $.ajax({
    type: "GET",
    url: "Login_admin/getAll/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "500px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "Login_admin/getAll/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Login_admin/add/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Login_admin/update",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Login_admin/delete/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "username",
          title: "username",
          type: "text",
          width: 150
        },
        {
          name: "password",
          title: "password ",
          type: "text",
          width: 150
        },
        {
          name: "level",
          title: "level",
          type: "text",
          width: 150
        },
        
        { type: "control" }
      ]
    });
  });
});
