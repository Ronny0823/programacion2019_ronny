using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Ejercicio
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
           
        }

        private void txtVerificar_Click(object sender, EventArgs e)
        {
            var numero = Convert.ToInt16(txtBuscador.Text);
           
            if (numero > 0)
            {
                MessageBox.Show("El numero es positivo");
            }
            else{
                MessageBox.Show("El numero es negativo");
            }

            if (numero %2== 0)
            {
                MessageBox.Show("numero par");
            }
            else
            {
                MessageBox.Show("numero impar");
            }
        }

        private void numericUpDown3_ValueChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            var colorR = Convert.ToInt16(numeroRojo.Value);
            var colorG = Convert.ToInt16(numeroVerde.Value);
            var colorB = Convert.ToInt16(numeroAzul.Value);

            this.BackColor = Color.FromArgb(colorR, colorG, colorB);

           
            
           




        }

        private void colorR1_Scroll(object sender, EventArgs e)
        {
            var barraR = Convert.ToInt16(colorR1.Value);
            var barraG = Convert.ToInt16(colorG2.Value);
            var barraB = Convert.ToInt16(colorB3.Value);

            this.BackColor = Color.FromArgb(barraR, barraG, barraB);
             progressBar1.Value = barraR;
           
        }

        private void colorG2_Scroll(object sender, EventArgs e)
        {
            var barraR = Convert.ToInt16(colorR1.Value);
            var barraG = Convert.ToInt16(colorG2.Value);
            var barraB = Convert.ToInt16(colorB3.Value);

            this.BackColor = Color.FromArgb(barraR, barraG, barraB);
           progressBar2.Value = barraG;
        }

        private void colorB3_Scroll(object sender, EventArgs e)
        {
            var barraR = Convert.ToInt16(colorR1.Value);
            var barraG = Convert.ToInt16(colorG2.Value);
            var barraB = Convert.ToInt16(colorB3.Value);

            this.BackColor = Color.FromArgb(barraR, barraG, barraB);
            progressBar3.Value = barraB;
        }
    }
}
