using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace GitHub_Desktop
{
    public partial class FormConfigure : Form
    {
        public FormConfigure()
        {
            InitializeComponent();
        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Lamar al fgormulario que queremos usar
            var formularioSignIn = new FormMake();

            //Mostrar el formulario
            formularioSignIn.Show();

            //Cerrar el actual
            //this.Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            // ceramos el formSignIn
            this.Close();
        }
    }
}
