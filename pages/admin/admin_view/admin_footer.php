<style type="text/css" media="screen">
	.vertical-nav {
		margin-top: ;
		min-width: 17rem;
		width: 17rem;
		height: 100vh;
		position: fixed;
		top: 0;
		left: 0;
		box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
		transition: all 0.4s;
		background-color: white;
		overflow-y: scroll;
	}

	.page-content {
		width: calc(100% );
		margin-left: 17rem;
		transition: all 0.4s;
	}

	/* for toggle behavior */
	#sidebar.active {
		margin-left: -17rem;
	}

	#content.active {
		width: 100%;
		margin: 0;
	}

	@media (max-width: 768px) {
		#sidebar {
			margin-left: -17rem;
		}
		#sidebar.active {
			margin-left: 0;
		}
		#content {
			width: 100%;
			margin: 0;
		}
		#content.active {
			margin-left: 17rem;
			width: calc(100% - 17rem);
		}
	}
	.separator {
		margin: 3rem 0;
		border-bottom: 1px dashed #fff;
	}

	.text-uppercase {
		letter-spacing: 0.1em;
	}

	.text-gray {
		color: #aaa;
	}
	.modal-backdrop{
		position: inherit !IMPORTANT;
	}
	.fc-daygrid-event{
		border-radius: 6px !IMPORTANT;
	}
	/* width */
	::-webkit-scrollbar {
		width: 10px;
	}

	/* Track */
	::-webkit-scrollbar-track {
		background: #f1f1f1; 
	}

	/* Handle */
	::-webkit-scrollbar-thumb {
		background: #888; 
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
		background: #555; 
	}
	.a_fontoflist{
		font-size: 20px !important;
		padding: 5% !important;
	}
	.space_of_items{
		padding-top: 9%;
	}
</style>