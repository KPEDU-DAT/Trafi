while ($rivi = mysqli_fetch_array($tulos)) {
                echo
                  "<tr>".
                  "<td>".$rivi["rekisterinumero"]."</td>".
                  "<td>".$rivi["ajoneuvoluokka"]."</td>".
                  "<td>".$rivi["ensirekisterointipvm"]."</td>".
                  "<td>".$rivi["ajoneuvoryhma"]."</td>".
                  "<td>".$rivi["ajoneuvonkaytto"]."</td>".
                  "<td>".$rivi["variantti"]."</td>".
                  "<td>".$rivi["versio"]."</td>".
                  "<td>".$rivi["kayttoonottopvm"]."</td>".
                  "<td>".$rivi["vari"]."</td>".
                  "<td>".$rivi["ovienlukumaara"]."</td>".
                  "<td>".$rivi["korityyppi"]."</td>".
                  "<td>".$rivi["ohjaamotyyppi"]."</td>".
                  "</tr>";

                echo "</tbody></thead></table>";
                  include("taulukko3.php");

                echo
                  "<tr>".
                  "<td>".$rivi["istumapaikkojenlkm"]."</td>".
                  "<td>".$rivi["omamassa"]."</td>".
                  "<td>".$rivi["teknSuurSallKokmassa"]."</td>".
                  "<td>".$rivi["tieliikSuurSallKokmassa"]."</td>".
                  "<td>".$rivi["ajonKokPituus"]."</td>".
                  "<td>".$rivi["ajonLeveys"]."</td>".
                  "<td>".$rivi["ajonKorkeus"]."</td>".
                  "<td>".$rivi["Kayttovoima"]."</td>".
                  "<td>".$rivi["iskutilavuus"]."</td>".
                  "<td>".$rivi["suurinNettoteho"]."</td>".
                  "<td>".$rivi["sylintereidenLkm"]."</td>".
                  "<td>".$rivi["ahdin"]."</td>".
                  "</tr>";
echo "</tbody></thead></table>";
                  include("taulukko4.php");

                echo
                  "<tr>".
                  "<td>".$rivi["sahkohybridi"]."</td>".
                  "<td>".$rivi["merkkiSelvakielinen"]."</td>".
                  "<td>".$rivi["mallimerkinta"]."</td>".
                  "<td>".$rivi["vaihteisto"]."</td>".
                  "<td>".$rivi["vaihteidenlkm"]."</td>".
                  "<td>".$rivi["kaupallinenNimi"]."</td>".
                  "<td>".$rivi["voimanValJaTehostamistapa"]."</td>".
                  "<td>".$rivi["tyyppihyvaksynta"]."</td>".
                  "<td>".$rivi["yksittaisKayttovoima"]."</td>".
                  "<td>".$rivi["kunta"]."</td>".
                  "<td>".$rivi["Co2"]."</td>".
                  "<td>".$rivi["mittarilukema"]."</td>".
                  "<td>".$rivi["alue"]."</td>
                  </tr>";
                  }
