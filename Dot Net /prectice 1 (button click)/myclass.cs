using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Windows.Forms;

namespace Windowsformprectical
{
    internal class myclass
    {
        internal void savebtn_Click()                        //internal or public kodukkalam. private koduththal form1.cs il work aagathu
        {
            MessageBox.Show("Save Button Click");
        }
        public void updatebtn_Click()
        {
            MessageBox.Show("Update Button Click");
        }
    }
}
