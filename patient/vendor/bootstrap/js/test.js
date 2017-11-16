 $(document).on("click", "[data-column]", function () {
      var button = $(this),
          header = $(button.data("column")),
          table = header.closest("table"),
          index = header.index() + 1, // convert to CSS's 1-based indexing
          selector = "tbody tr td:nth-child(" + index + ")",
          column = table.find(selector).add(header);
		  alert(index);
		column.toggleClass("hidden");
    });