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
    public partial class FormSignIn : Form
    {
        public FormSignIn()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Lamar al fgormulario que queremos usar
            var formularioSignIn = new FormConfigure();

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

        private void linkLabel1_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            System.Diagnostics.Process.Start("https://github.com/password_reset");
        }

        private void linkLabel2_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            System.Diagnostics.Process.Start("https://github.com/login");
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

           
            //if ((txtUsername.Text != "") && (txtPassword.Text != "")) txtSignIn.Enabled = true;
            //else txtSignIn.Enabled = false;

            var longitudUsername = txtUsername.Text.Length;
            var longitudPassword = txtPassword.Text.Length;

           if (longitudUsername > 0 && longitudPassword > 0)
           {
               btnSignIn.Enabled = true;
           }
           else
           {
               btnSignIn.Enabled = false;
           }

        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {
            var longitudUsername = txtUsername.Text.Length;
            var longitudPassword = txtPassword.Text.Length;

            if (longitudUsername > 0 && longitudPassword > 0)
            {
                btnSignIn.Enabled = true;
            }
            else
            {
                btnSignIn.Enabled = false;
            }
        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void label6_Click(object sender, EventArgs e)
        {

        }
    }
}
