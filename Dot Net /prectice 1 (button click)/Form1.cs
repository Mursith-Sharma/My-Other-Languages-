using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Windowsformprectical
{
    public partial class Form1 : Form
    {

        private myclass myclass_object = new myclass();
        public Form1()
        {
            InitializeComponent();
        }

        private void savebtn_Click(object sender, EventArgs e)
        {
            
            myclass_object.savebtn_Click();
        }

        private void updatebtn_Click(object sender, EventArgs e)
        {
            myclass_object.updatebtn_Click();
        }
    }
}
