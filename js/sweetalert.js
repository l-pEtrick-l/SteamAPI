
    document.querySelector("#submit_form").addEventListener("submit", function(e) {
      e.preventDefault();

      const dados = new FormData(this);

      fetch(this.action, {
          method: "POST",
          body: dados
        })
        .then(async response => {
          const data = await response.json().catch(() => null);
          if (!response.ok || !data || !data.ok) {
            throw new Error(data?.message || "Não foi possível concluir a operação.");
          }
          return data;
        })
        .then(({
          message
        }) => {
          Swal.fire({
            icon: "success",
            title: "Sucesso!",
            text: message,
            timer: 2000,
            showConfirmButton: false
          }).then(() => window.location.href='meus-jogos.html');
        })
        .catch(err => {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: err.message
          }) .then(() => window.location.href='../index.html');
        });
    });