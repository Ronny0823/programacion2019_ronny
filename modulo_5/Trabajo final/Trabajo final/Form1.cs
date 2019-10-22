using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Trabajo_final
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void label9_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            var valor1 = Convert.ToInt16(textBox1.Text);
            var valor2 = Convert.ToInt16(textBox2.Text);

            var button1 = Math.Sqrt(valor1 * valor1 + valor2 * valor2);

            MessageBox.Show("");
         
        }
    }
}
