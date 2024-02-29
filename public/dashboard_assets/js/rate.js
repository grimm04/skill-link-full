class Rate {
	constructor(data)
	{
		this.el = $(data.el);
		this.pagination = $(data.pagination);
		this.input = $(data.input);
		this.btn = $(data.btn);
		this.changeSelected();
		this.submit();
	}

	changeSelected()
	{
		let _this = this;
		this.pagination.on('click', function(ev) {
			ev.preventDefault();
			let el = $(ev.target);
			_this.pagination.find('.active').removeClass('active');
			
			el.parent().addClass('active');
			_this.input.val(el.attr('data-value'));
		});
	}

	submit()
	{
		let _this = this;
		this.el.on('submit', function(ev) {
			ev.preventDefault();
			alert("Value selected : "+_this.input.val());
		});
	}
}