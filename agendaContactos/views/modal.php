      <!--Modal-->

      <dialog id="modal" class="modal">
          <!--header-->
          <div class="modalHeader flexRow">
            <div class="containerAlert flexRow">
              <div id="imageAlert" class="image"><img src="images/perigo.png" alt="Image de perigo" class="image"></div>
              <span class="titleAlert">Alerta</span>
            </div>
            <!--Button close-->
            <button
            id="buttonCloseModal"
              class="buttonModal displayFlex"
              onclick="closeModal('modal')"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="35"
                height="35"
                fill="currentColor"
                class="bi bi-x svg"
                viewBox="0 0 16 16"
              >
                <path
                  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                />
              </svg>
            </button>
          </div>
          <!--body-->
          <div id="modalInputLength" class="modalBody">
            <span id="messageAlert" class="messageAlert"></span>
          </div>
        </dialog>